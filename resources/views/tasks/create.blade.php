<x-layout page="Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
            Voltar
        </a>
    </x-slot:btn>

    <section id="section_task">
        <h1>Criar tarefa</h1>
        <form method="POST" action="{{route('task.create_action')}}">
            @csrf
            <x-form.text_input name="title" label="Titulo da task" placeholder="Digite sua Task" />
            <x-form.text_input type="datetime-local" name="due_date" label="Titulo da task" placeholder="Digite sua Task" />
            <x-form.select_input name="category_id" label="Categoria" placeholder="Digite sua Task">
               @foreach ($categories as $category)
               <option value="{{$category->id}}">{{$category->title}}</option>
               @endforeach
            </x-form.select_input>
            <x-form.textarea_input name="description" label="Descrição da tarefa" placeholder="Digite a descrição da tarefa" />


            <x-form.form_button resetTxt="Resetar" submitTxt="Criar Tarefa"/>

        </form>
    </section>

</x-layout>
