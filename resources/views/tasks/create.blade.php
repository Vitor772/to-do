<x-layout page="Login">
    <x-slot:btn>
        <a href="{{ route('home') }}" class="btn btn-primary">
           Voltar
        </a>
    </x-slot:btn>
    <section id="create_section_task">
        <h1>Criar tarefa</h1>
        <form>
            <div class="inputArea">
                <label for="title">Titulo da Task</label>
                <input  id="title" name="title" placeholder="Digite o titulo da tarefa" requires/>
            </div>
            <div class="inputArea">
                <label for="title">Data de Realização</label>
                <input type="date" name="due_date" placeholder="Digite o titulo da tarefa" requires/>
            </div>
            <div class="inputArea">
                <label for="category">Categoria</label>
                <select id="category" name="category" required>
                    <option selected disabled value="">Selecione a Categoria</option>
                    <option>Valor qualquer</option>
                </select>
            </div>

            <div class="inputArea">
                <label for="title">Descrição da Tarefa</label>
                <textarea name="description" placeholder="Digite uma descrição para sua tarefa"></textarea>
            </div>

            <div class="inputArea">
                <button type="submit" class="btn btn-primary">Criar Tarefa</button>
            </div>
        </form>
    </section>
</x-layout>
