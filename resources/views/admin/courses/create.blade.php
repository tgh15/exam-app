<x-app-layout>
{{-- <h1>Form</h1>
@if($errors->any())
    <ul>
        @foreach(@errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif --}}

<form action="{{route('dashboard.courses.store')}}" enctype="multipart/form-data" method="POST">
<div class="flex justify-between items-center mb-6">
    <h6 class="text-lg text-gray-600 font-semibold">Add A New Course</h6>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>

  </div>
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
  
        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Course Name</label>
            <div class="mt-2">
              <div class="flex bg-white rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="name" id="name" class="block flex-1 border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Course Name">
              </div>
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Course Price</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="price" id="price" class="block flex-1 border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Course Name">
              </div>
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="duration" class="block text-sm font-medium leading-6 text-gray-900">Working Duration</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="duration" id="duration" class="block flex-1 border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6" placeholder="Course Name">
              </div>
            </div>
          </div>
          <div class="sm:col-span-4">
            <label for="category_id" class="block text-sm font-medium leading-6 text-gray-900">Course Category</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <select name="category_id" id="category_id" class="block flex-1 border-0 bg-transparent py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                    <option value="">Select</option>
                    @forelse ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @empty
                        
                    @endforelse
                </select>
            </div>
            </div>
          </div>
          
          <div class="sm:col-span-4">
            <label for="cover" class="block text-sm font-medium leading-6 text-gray-900">Course Cover</label>
            <div class="mt-2">
              <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="file" name="cover" id="cover" class="w-full overflow-clip rounded-md border border-neutral-300 bg-neutral-50/50 text-sm text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" placeholder="Course Name">
              </div>
            </div>
          </div>
  
          <div class="col-span-full">
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">About</label>
            <div class="mt-2">
              <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
            <p class="mt-3 text-sm leading-6 text-gray-600">Write a few sentences about this course.</p>
          </div>
        </div>
      </div>
  </form>
  

{{-- <form action="{{route('dashboard.courses.store')}}" enctype="multipart/form-data" method="POST">
    @csrf
    <div class="relative flex w-full max-w-sm flex-col gap-1">
        <label class="w-fit pl-0.5 text-sm text-neutral-600 dark:text-neutral-300" for="fileInput">Upload File</label>
        <input id="fileInput" type="file" class="w-full overflow-clip rounded-md border border-neutral-300 bg-neutral-50/50 text-sm text-neutral-600 file:mr-4 file:cursor-pointer file:border-none file:bg-neutral-50 file:px-4 file:py-2 file:font-medium file:text-neutral-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black disabled:cursor-not-allowed disabled:opacity-75 dark:border-neutral-700 dark:bg-neutral-900/50 dark:text-neutral-300 dark:file:bg-neutral-900 dark:file:text-white dark:focus-visible:outline-white" />
    </div>

    <input type="file" name="cover">
    <input type="text" name="name">
    <select name="category_id" id="category_id">
        <option value="">Select</option>
        @forelse ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @empty
            
        @endforelse
    </select>
    <button type="submit">Save Course</button>
</form> --}}

</x-app-layout>
