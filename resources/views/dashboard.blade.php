<x-app-layout>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-sky-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dash text-sky font-semibold">
                    What don't you want to do today?
                    <a href="/tasks/create">
                        <x-button class="bg-sky-500">
                            Create Task
                        </x-button>
                    </a>
                </div>

            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-sky-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-red-500 text-white font-bolder">
                    <div class="flex items-center justify-between pb-1">
                        
                        Crucial
                    </div>
                    <div class="task-container">
                        @foreach(Auth::user()->tasks as $task)
                        @if($task->task_type == 'Crucial')
                        <div class="task-card">
                            <h2 class="underline">{{$task->task_name}}</h2>
                            
                            <p class="desc">{{$task->task_description}}</p>
                            <br>
                            <a href="/tasks/{{$task->id}}/edit">
                                <x-button>
                                    Edit
                                </x-button>
                            </a>
                            <form action="/tasks/{{$task->id}}" method="post">
                                @csrf
                                @method('delete')
                                <x-button style="margin-top: 10px;">
                                    Done
                                </x-button>
                            </form>

                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-sky-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-yellow-500 text-white font-bolder">
                    <div class="flex items-center justify-between pb-1">
                        Important
                    </div>
                    <div class="task-container">
                        @foreach(Auth::user()->tasks as $task)
                        @if($task->task_type == 'Important')
                        <div class="task-card">
                            <h2 class="underline">{{$task->task_name}}</h2>
                            
                            <p class="desc">{{$task->task_description}}</p>
                            <a href="/tasks/{{$task->id}}/edit">
                                <x-button>
                                    Edit
                                </x-button>
                            </a>
                            <form action="/tasks/{{$task->id}}" method="post">
                                @csrf
                                @method('delete')
                                <x-button style="margin-top: 10px;">
                                    Done
                                </x-button>
                            </form>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-sky-500 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-green-500 text-white font-bolder">
                    <div class="flex items-center justify-between pb-1">
                        Normal
                    </div>
                    <div class="task-container">
                        @foreach(Auth::user()->tasks as $task)
                        @if($task->task_type == 'Normal')
                        <div class="task-card">
                            <h2 class="underline">{{$task->task_name}}</h2>
                            
                            <p class="desc">{{$task->task_description}}</p>
                            <a href="/tasks/{{$task->id}}/edit">
                                <x-button>
                                    Edit
                                </x-button>
                            </a>
                            <form action="/tasks/{{$task->id}}" method="post">
                                @csrf
                                @method('delete')
                                <x-button style="margin-top: 10px;">
                                    Done
                                </x-button>
                            </form>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>