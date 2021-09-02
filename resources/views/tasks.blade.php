<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>
    <div class="flex flex-col my-2 px-4 py-4">
      <div class="flex justify-end rounded  px-2 py-2">
        <div class="grid grid-cols-1 mr-2">
          <button class="bg-green-500 text-white font-bold py-2 px-4 rounded-3xl  inline-flex items-center" onclick="switchVisible()">
            <ion-icon name="apps" class="text-xl"></ion-icon>
          </button>
        </div>
        <div class="grid grid-cols-1">
        <button class="bg-green-500 text-white font-bold py-2 px-4 rounded-full inline-flex items-center" onclick="window.location='{{ url("add_task") }}' ">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          <span class="ml-2">Add Task</span>
        </button>
      </div>
      </div>
      <div class="my-3 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
          <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-indigo-400 text-white">
                <tr>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Id</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Title</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Status</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Priority</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Created</th>
                  <th scope="col" class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider">Actions</th>
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($tasks as $task )
                
                <tr class="hover:bg-blue-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-600">{{$task->id}}</div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <div class="ml-0">
                        <div class="text-sm font-medium text-gray-600">{{$task->task_title}}</div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    @if ($task->status == 'New')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-300 text-white"> {{ $task->task_status}} </span>
                    @elseif ($task->task_status == 'In Progress')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-300 text-white"> {{ $task->task_status}} </span>
                    @elseif ($task->task_status == 'On Hold')
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-300 text-white"> {{ $task->task_status}} </span>
                    @else
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-300 text-white"> {{ $task->task_status}} </span>
                    @endif
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-600">{{$task->task_priority}}</div>
                  </td>
                  
                  <td class="px-6 py-4 whitespace-nowrap  text-gray-500 text-md">{{$task->created_at}}</td>
                  <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                    <a href="tasks/{{ $task->id }}/edit" class="text-indigo-600 hover:text-indigo-900"><ion-icon name="create-outline"></ion-icon></a>
                    <a href="tasks/{{ $task->id }}/delete" class="text-indigo-600 hover:text-indigo-900 ml-2"><ion-icon name="trash-outline"></ion-icon></a>
                  </td>
                </tr>
    
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    
    </x-app-layout>