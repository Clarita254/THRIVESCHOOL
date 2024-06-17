function toggleFAQ(element){
    const faqItem=element.parentElement;
    const faqAnswer=faqItem.querySelector('.faq-answer');
    const faqIcon=faqItem.querySelector('.faq-icon');

    if(faqAnswer.style.display=='block'){
        faqAnswer.style.display='none';
        faqIcon.textContent='+';
        faqItem.classList.remove('active');

    }else{
        faqAnswer.style.display = 'block';
        faqIcon.textContent= '-';
        faqItem.classList.add('active');
    }
}