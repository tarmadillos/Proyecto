<button class="btn-animado">Clic Aquí</button>

<style>
.btn-animado {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 12px 24px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: background-color 0.3s ease;
}

.btn-animado::after {
    content: '';
    background: rgba(255, 255, 255, 0.5);
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: all 0.6s ease;
}

.btn-animado:hover {
    background-color: #218838;
}

.btn-animado:active::after {
    width: 200px;
    height: 200px;
}
</style>