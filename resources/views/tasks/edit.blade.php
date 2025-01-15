<x-layout page="Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
           Voltar
        </a>
    </x-slot:btn>
    <section id="section_task">
        <h1>Criar tarefa</h1>
        <form method="POST" action="{{route('task.edit_action')}}">
            @csrf
            <x-form.text_input name="title" label="Titulo da task" :value="$task->title" placeholder="Digite sua Task" />
            <x-form.text_input type="datetime-local" value="{{$task->due_date }}" name="due_date" label="Titulo da task" placeholder="Digite sua Task" />
            <x-form.select_input name="category_id" label="Categoria" placeholder="Digite sua Task">
               @foreach ($categories as $category)
               <option value="{{$category->id}}"
                @if($category->id == $task->category_id)
                selected
                @endif
                >{{$category->title}}</option>
               @endforeach
            </x-form.select_input>
            <x-form.textarea_input value="{{$task->description}}" name="description" label="Descrição da tarefa" placeholder="Digite a descrição da tarefa" />


            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa"/>

        </form>
    </section>
</x-layout>
