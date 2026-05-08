let tasks = [];

function loadTasks() {
    const saved = localStorage.getItem('tasks');
    if (saved) tasks = JSON.parse(saved);
}

function saveTasks() {
    localStorage.setItem('tasks', JSON.stringify(tasks));
}

function render() {
    const list = document.getElementById('task-list');
    if (!list) return;

    list.innerHTML = '';

    tasks.forEach(task => {
        const li = document.createElement('li');
        if (task.done) li.classList.add('done');

        li.innerHTML = `
           <span>${task.text}</span>
        <div>
            <button class="toggle" style="background-color: #4CAF50; color: white; border: none; padding: 8px 12px; border-radius: 6px; cursor: pointer;">✓
            </button>
            <button class="delete" style="background-color: #f44336; color: white; border: none; padding: 8px 12px; border-radius: 6px; cursor: pointer;">✕
            </button>
        </div>
        `;

        li.querySelector('.toggle').addEventListener('click', () => {
            task.done = !task.done;
            saveTasks();
            render();
        });

        li.querySelector('.delete').addEventListener('click', () => {
            tasks = tasks.filter(t => t.id !== task.id);
            saveTasks();
            render();
        });

        list.appendChild(li);
    });
}

function addTask() {
    const input = document.getElementById('task-input');
    const text = input.value.trim();

    if (text === '') {
        alert('Digite uma tarefa antes de adicionar!');
        return;
    }

    tasks.unshift({
        id: Date.now(),
        text: text,
        done: false
    });

    input.value = '';
    saveTasks();
    render();
}

// Inicialização
document.addEventListener('DOMContentLoaded', () => {
    loadTasks();

    const addBtn = document.getElementById('add-btn');
    if (addBtn) addBtn.addEventListener('click', addTask);

    const input = document.getElementById('task-input');
    if (input) {
        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') addTask();
        });
    }

    render();
});