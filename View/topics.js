    
    //cancel with create button (declaring i)
           let i=0;
    // Create form
    document.querySelector('#btn').addEventListener('click',()=>{

        i++;
        document.querySelector('.form_topics').classList.add('form_topics_display');
        document.querySelector('.form_topics').classList.remove('.form_topics');

        if (i>1) {
            document.querySelector('.form_topics_display').classList.add('form_topics');
            document.querySelector('.form_topics_display').classList.remove('form_topics_display');
            i=0;
        }
    });
 

    //cancel with button
    document.querySelector('#cancel').addEventListener('click',()=>{
        document.querySelector('.form_topics_display').classList.add('form_topics');
        document.querySelector('.form_topics_display').classList.remove('form_topics_display')
    });

