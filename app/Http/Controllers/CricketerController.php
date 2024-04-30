<?php
namespace App\Http\Controllers;
use App\Models\Cricketer;
use Illuminate\Http\Request;

class CricketerController extends Controller{
    public function handle($request, Closure $next)
{
    if (!auth()->user()->isAdmin()) {
        return redirect()->route('home'); 
    }

    return $next($request);
}


    public function destroy(Request $request)
    {
        $cricketerId = $request->input('cricketer_id');

        $cricketer = Cricketer::find($cricketerId);

        if ($cricketer) {
            $cricketer->delete();

            return redirect()->route('admin.dashboard')->with('success', 'Cricketer deleted successfully!');
        } else {
            return redirect()->route('admin.dashboard')->with('error', 'Cricketer not found.');
        }
    }
    public function displayAllAboutCricket()
    {
        $stadiums = [
            [
                'name' => 'Melbourne Cricket Ground (MCG)',
                'location' => 'Melbourne, Australia',
                'capacity' => '100,024',
                'ticket_price' => '$50 - $200',
                'image' => '1.jpg',
            ],
            [
                'name' => 'Eden Gardens',
                'location' => 'Kolkata, India',
                'capacity' => '66,349',
                'ticket_price' => 'INR 500 - INR 5000',
                'image' => '2.jpg',
            ],
            [
                'name' => 'Lord\'s Cricket Ground',
                'location' => 'London, England',
                'capacity' => '30,000',
                'ticket_price' => '£20 - £150',
                'image' => '3.jpg',
            ],
            [
                'name' => 'Sydney Cricket Ground (SCG)',
                'location' => 'Sydney, Australia',
                'capacity' => '48,000',
                'ticket_price' => '$40 - $180',
                'image' => '4.jpg',
            ],
            [
                'name' => 'Wankhede Stadium',
                'location' => 'Mumbai, India',
                'capacity' => '33,108',
                'ticket_price' => 'INR 800 - INR 8000',
                'image' => '5.jpg',
            ],
            [
                'name' => 'Adelaide Oval',
                'location' => 'Adelaide, Australia',
                'capacity' => '53,583',
                'ticket_price' => '$45 - $190',
                'image' => '6.jpg',
            ],
            [
                'name' => 'The Oval',
                'location' => 'London, England',
                'capacity' => '25,500',
                'ticket_price' => '£15 - £120',
                'image' => '7.jpg',
            ],
            [
                'name' => 'M. Chinnaswamy Stadium',
                'location' => 'Bengaluru, India',
                'capacity' => '40,000',
                'ticket_price' => 'INR 400 - INR 5000',
                'image' => '8.jpg',
            ],
            [
                'name' => 'Newlands Cricket Ground',
                'location' => 'Cape Town, South Africa',
                'capacity' => '25,000',
                'ticket_price' => 'R100 - R800',
                'image' => '9.jpg',
            ],
            [
                'name' => 'Lahore Gaddafi Stadium',
                'location' => 'Lahore, Pakistan',
                'capacity' => '27,000',
                'ticket_price' => 'PKR 500 - PKR 5000',
                'image' => '10.png',
            ],
        ];
    
        // Assuming $stadiums is already sorted by some criteria to get the top 10
    
        $top_10_stadiums = array_slice($stadiums, 0, 10);
    
        return view('all_about_cricket', compact('top_10_stadiums'));
    }
    

    
    public function update(Request $request, Cricketer $cricketer)
    {
        $cricketer->update($request->all());

        return redirect()->route('cricketers.index')->with('success', 'Cricketer updated successfully!');
    }
    public function edit()
{
    return view('admin.edit');
}

   
public function store(Request $request)
{
    $data = $request->validate([
        'name' => 'required|string|max:255',
        'innings' => 'nullable|integer|min:0',
        'run_rate' => 'nullable|numeric|min:0',
        'matches_played' => 'nullable|integer|min:0',
        'other_details' => 'nullable|string',
        'gender' => 'required|in:male,female',
    ]);

    Cricketer::create($data);

    return redirect()->route('admin.dashboard')->with('success', 'Cricketer added successfully!');
}





}

