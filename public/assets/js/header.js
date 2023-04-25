const itens = document.querySelector('.menu-item');

const toggleElement = (e) => {
        
    document.querySelector('.show-itens').classList.toggle('show');
    toggleMenu();
}
document.querySelector('.menu-item').addEventListener('click', e => {
    toggleElement(e)
});

const toggleMenu = () => {
    const filhosMenuItem = [...itens.children];
    filhosMenuItem.forEach( e => {
        if(e.classList.contains('item1')) {
            e.classList.toggle('u1');
        } else if(e.classList.contains('item2')) {
            e.classList.toggle('u2');
        } else if(e.classList.contains('item3')) {
            e.classList.toggle('u3');
            
        }
    });
};