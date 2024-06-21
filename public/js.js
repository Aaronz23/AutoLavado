

document.addEventListener('DOMContentLoaded',function(){
    const presentacionSection =
    document.getElementById('presentacion-select');
    presentacionSection.addEventListener('click', function(){
        bounceEffect(presentacionSection);
    });
    function bounceEffect(element){
        let position = 0;
        const distance = 29;
        const duration = 500;
        const startTime = performance.now();

        function update(){
            const elapsed = performance.now() - startTime;
            const progress = elapsed / duration;

            if(progress < 1){
                position = distance * Math.sin(progress * Math.PI);
                element.style.transform = `translateX(${position}px)`;
                requestAnimationFrame(update);
            }else{
                element.style.transform = 'translateX(0)';
            }
        }
        requestAnimationFrame(update);
    }
});

document.addEventListener('DOMContentLoaded',function(){
    const profileImage =
    document.getElementById('profile-image');
    profileImage.addEventListener('click', function(){
        bounceEffect(profileImage);
    });
    function bounceEffect(element){
        let position = 0;
        const distance = 29;
        const duration = 500;
        const startTime = performance.now();

        function update(){
            const elapsed = performance.now() - startTime;
            const progress = elapsed / duration;

            if(progress < 1){
                position = distance * Math.sin(progress * Math.PI);
                element.style.transform = `translateY(${position}px)`;
                requestAnimationFrame(update);
            }else{
                element.style.transform = 'translateY(0)';
            }
        }
        requestAnimationFrame(update);
    }
});