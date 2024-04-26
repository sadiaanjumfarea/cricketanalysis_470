<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Cricketer;
use App\Models\MatchProposal; // Add this import
use App\Models\Bid;


class TeamController extends Controller
{
    
    public function create()
    {
        $cricketers = Cricketer::all();
        return view('team.create', compact('cricketers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'team_name' => 'required|string|max:255',
            'user_id' => 'required|integer', 
            'cricketers' => 'required|array|min:5|max:5', 
        ]);

        $team = Team::create([
            'name' => $request->input('team_name'),
            'user_id' => $request->input('user_id'),
        ]);

        $selectedCricketers = $request->input('cricketers');
        $team->cricketers()->sync($selectedCricketers);
        return redirect()->route('team.list')->with('success', 'Team created successfully!');
    }
    
    public function proposeMatch(Request $request)
    {
        // Validate the match proposal data
        $request->validate([
            'match_date' => 'required|date',
            'match_location' => 'required|string|max:255',
            'match_description' => 'required|string',
        ]);

        // Create a new match proposal
        $matchProposal = new MatchProposal();
        $matchProposal->match_date = $request->input('match_date');
        $matchProposal->match_location = $request->input('match_location');
        $matchProposal->match_description = $request->input('match_description');
        $matchProposal->user_id = $request->input('userid');

        return redirect()->back()->with('success', 'Match proposed successfully!');
    }

    public function bidOnMatch(Request $request, $matchId)
    {
        // Validate the bid data
        $request->validate([
            
            'user_id' => 'required|numeric', // Assuming user ID is required in the input
        ]);
    
        // Create a new bid
        $bid = new Bid();
        $bid->match_id = $matchId;
        $bid->user_id = $request->input('user_id'); // Get user ID from input
        $bid->bid_amount = $request->input('bid_amount'); // Set bid amount
        $bid->amount = $request->input('bid_amount'); // Set amount field
        $bid->save();
    
        return redirect()->back()->with('success', 'Bid placed successfully!');
    }
    



public function showProposeMatchAndBidding()
{
    // Fetch all match proposals
    $matches = MatchProposal::all();
    
    // Get the authenticated user's ID
    $userId = request()->input('user_id');

    // Assuming you have a view named 'propose_match_and_bidding' in the 'team' folder
    return view('team.propose_match_and_bidding', compact('matches', 'userId'));
}
}
