const likeBtnForms = document.querySelectorAll('.like-btn-form');

likeBtnForms.forEach(likeBtnForm =>{
  likeBtnForm.addEventListener("submit",function(e){
     e.preventDefault();

     const btn = likeBtnForm.querySelector('.like-btn');
     const countEl = likeBtnForm.querySelector('.like-count');

     const formData = new FormData(this);

     fetch('/EvolveAi/post/like/',{
      method : "post",
      body : formData
     })
     .then(res => res.json())
     .then(data=>{
      if(data.success){
      const liked = btn.getAttribute('data-liked') === 'true';
      btn.setAttribute('data-liked', !liked);

      btn.style.fontVariationSettings = !liked ? "'FILL' 1" : "'FILL' 0";
      btn.classList.toggle('text-black');
      btn.classList.toggle('text-gray-400');

      countEl.textContent = data.likeCount;
      }
     })
  })
})