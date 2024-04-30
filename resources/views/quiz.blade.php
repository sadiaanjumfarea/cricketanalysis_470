<!-- Quiz Questions -->
<form action="/quiz/submit" method="post">
    @csrf
    @foreach($questions as $question)
        <p>{{ $question->question }}</p>
        <input type="radio" name="answers[{{ $question->id }}]" value="yes"> Yes
        <input type="radio" name="answers[{{ $question->id }}]" value="no"> No
    @endforeach
    <button type="submit">Submit Quiz</button>
</form>
