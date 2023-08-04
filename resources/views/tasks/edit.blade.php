<x-app-layout>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="margin: 20px; padding: 20px;">
        <form action="/tasks/{{$task->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div style="padding: 20px;">
                <h1 style="font-size: 30px; font-weight: bolder; color: #1167B1; padding-bottom: 10px; ">Edit Task</h1>

                <label for="task_name" class="col-md-4 col-form-label" style="color: #1167B1; font-size: 20px;">Task Name</label>

                <x-input id="task_name" class="block mt-1 w-full" type="text" value="{{old('task_name') ?? $task->task_name}} " name="task_name" autofocus/>

                @error('task_name')
                <strong style="color: red;">{{ $message }}</strong>
                @enderror

            </div>
            <div style="padding: 20px;">

                <label for="task_description" class="col-md-4 col-form-label" style="color: #1167B1; font-size: 20px;">Task Description</label>

                <x-input id="task_description" class="block mt-1 w-full" type="text" value="{{old('task_description') ?? $task->task_description}}" name="task_description" autofocus/>

                @error('task_description')
                <strong style="color: red;">{{ $message }}</strong>
                @enderror

            </div>
            <!-- checkbox for task type -->
            <div style="padding-left: 20px; padding-top: 10px; align-items: center;">
                <label for="task_type" class="col-md-4 col-form-label" style="color: #1167B1; font-size: 20px;">Task Type</label><br>

                <input type="radio" id="task_type" name="task_type" value="Crucial" style="color:#1167B1">
                <label for="task_type" style="font-size: 20px;">Crucial</label><br>

                <input type="radio" id="task_type" name="task_type" value="Important" style="color:#1167B1">
                <label for="task_type" style="font-size: 20px;">Important</label><br>

                <input type="radio" id="task_type" name="task_type" value="Normal" style="color:#1167B1">
                <label for="task_type" style="font-size: 20px;">Normal</label><br>

                @error('task_type')
                <strong style="color: red;">{{ $message }}</strong>
                @enderror
            </div>
            <div style="padding-left: 20px; padding-top: 20px;">
                <x-button>
                    Save
                </x-button>
            </div>
        </form>
    </div>

</x-app-layout>