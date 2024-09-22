<h1>Form</h1>
{{-- @if($errors->any())
    <ul>
        @foreach(@errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif --}}

<form action="{{route('dashboard.courses.update', $course)}}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <input type="file" name="cover">
    <input type="text" value="{{$course->name}}" name="name">
    <select name="category_id" id="category_id">
        <option value="{{$course->category->id}} selected">{{$course->category->name}}</option>
        @forelse ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @empty
            
        @endforelse
    </select>
    <button type="submit">Save Course</button>
</form>