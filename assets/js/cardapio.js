
// Função para filtrar os itens com base no valor do filtro
function filterItems(filterValue) {

var items = document.querySelectorAll('.all');

items.forEach(function(item) {
    var classes = item.classList;
    
    // Se o valor do filtro for "*", mostre todos os itens de conteúdo
    if (filterValue === '*') {
    item.style.display = 'block';
    } else {
    // Caso contrário, verifique se o item tem a classe correspondente ao valor do filtro
    if (classes.contains(filterValue)) {
        item.style.display = 'block';
    } else {
        item.style.display = 'none';
    }
    }
});

}

