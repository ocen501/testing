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





ClassicEditor
    .create( document.querySelector( '#body' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );


