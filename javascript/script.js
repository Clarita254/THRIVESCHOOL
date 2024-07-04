function toggleFAQ(element){
    const faqItem=element.parentElement;
    const faqAnswer=faqItem.querySelector('.faq-answer');
    const faqIcon=faqItem.querySelector('.faq-icon');

    if(faqAnswer.classList.contains('visible')){
        faqAnswer.classList.remove('visible');
        faqIcon.textContent='+';
        faqItem.classList.remove('active');

    }else{
        faqAnswer.classList.add( 'visible');
        faqIcon.textContent= '-';
        faqItem.classList.add('active');
    }
}




