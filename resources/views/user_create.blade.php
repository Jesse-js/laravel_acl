<div>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <button type="submit">Submit</button>
    </form>
</div>
