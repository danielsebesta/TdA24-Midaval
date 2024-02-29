<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tic Tac Toe</title>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background: linear-gradient(45deg, #ff6ec4, #00ff00);
        background-size: 400% 400%;
        animation: gradientAnimation 10s ease infinite;
    }

    @keyframes gradientAnimation {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }

    .board {
        display: grid;
        grid-template-columns: repeat(3, 100px);
        grid-template-rows: repeat(3, 100px);
        gap: 2px;
    }

    .cell {
        width: 100px;
        height: 100px;
        background-color: #eee;
        border: 1px solid #aaa;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 2em;
        cursor: pointer;
    }
</style>
</head>
<body>
<div class="board" onclick="handleCellClick(event)">
    <div class="cell" id="cell-0"></div>
    <div class="cell" id="cell-1"></div>
    <div class="cell" id="cell-2"></div>
    <div class="cell" id="cell-3"></div>
    <div class="cell" id="cell-4"></div>
    <div class="cell" id="cell-5"></div>
    <div class="cell" id="cell-6"></div>
    <div class="cell" id="cell-7"></div>
    <div class="cell" id="cell-8"></div>
</div>
<script>
let currentPlayer = '💩';
let gameEnded = false;

function handleCellClick(event) {
    if (gameEnded) return;
    const cell = event.target;
    if (cell.textContent === '') {
        cell.textContent = currentPlayer;
        if (checkWinner(currentPlayer)) {
            alert("Player " + currentPlayer + " wins!");
            gameEnded = true;
        } else if (checkDraw()) {
            alert("It's a draw!");
            gameEnded = true;
        } else {
            currentPlayer = currentPlayer === '💩' ? '👽' : '💩';
            if (currentPlayer === '👽') {
                setTimeout(() => botMove(), 500);
            }
        }
    }
}

function checkWinner(player) {
    const cells = document.querySelectorAll('.cell');
    const winningCombinations = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], // Rows
        [0, 3, 6], [1, 4, 7], [2, 5, 8], // Columns
        [0, 4, 8], [2, 4, 6] // Diagonals
    ];
    return winningCombinations.some(combination => {
        const [a, b, c] = combination;
        return cells[a].textContent === player && cells[a].textContent === cells[b].textContent && cells[a].textContent === cells[c].textContent;
    });
}

function checkDraw() {
    const cells = document.querySelectorAll('.cell');
    return Array.from(cells).every(cell => cell.textContent !== '');
}

function botMove() {
    const cells = document.querySelectorAll('.cell');
    const emptyCells = [];
    cells.forEach((cell, index) => {
        if (cell.textContent === '') {
            emptyCells.push(index);
        }
    });

    const index = Math.floor(Math.random() * emptyCells.length);
    cells[emptyCells[index]].textContent = '👽';

    if (checkWinner('O')) {
        alert("Bot wins!");
        gameEnded = true;
    } else if (checkDraw()) {
        alert("It's a draw!");
        gameEnded = true;
    } else {
        currentPlayer = '💩';
    }
}
</script>
</body>
</html>
