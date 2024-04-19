<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Task Title:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="description">Task Description:</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <button type="submit">Create</button>
</form>