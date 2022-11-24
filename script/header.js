function dropdown() {
    document.getElementById('submenu').classList.toggle('hidden');
    document.getElementById('arrow').classList.toggle('rotate-0'); 
}
dropdown()



function bars(e) {
    let list = document.querySelector('ul');
    console.log(list);
    // e.class === 'Bars' ? (e.class = '',list.classList.add('top-[80px])'),list.classList.add('opacity-100')) :(e.class = 'Bars',list.classList.remove('top-[80px]'),list.classList.remove('opacity-100')) 
    e.classList.contains('fa-bars') ? (e.classList.remove('fa-bars'), e.classList.add('fa-times'), list.classList.add('top-[0px]'),list.classList.add('opacity-100')) :( e.classList.add('fa-bars'),e.classList.remove('fa-times'),list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'));
}


