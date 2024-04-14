window.onload = (function(){
    if(document.querySelector('.index')){
        window.addEventListener('scroll', handleScroll);
    }else {
        document.querySelector('.header').style.height = "40px";
    }
});

function handleScroll() {
    const layer1Bottom = document.querySelector('.layer1').getBoundingClientRect().top;

    if (-100 >= layer1Bottom) {
      // 현재 화면 상단 위치가 .layer1 요소 아래를 넘어갔을 때
      document.querySelector('.header').style.height = "40px";
    } else {
      // 현재 화면 상단 위치가 .layer1 요소 아래보다 작을 때
      document.querySelector('.header').style.height = "0px";
    }
  }

function closeModal(target_name){
    document.querySelector(target_name).classList.add('hide');
}

function photoViewing(obj){
    document.getElementById("photo_modal").classList.remove("hide");
    document.getElementById("photo_viewer").style.backgroundImage = "url(" + obj.children[0].src + ")";
    document.getElementById("photo_viewer").style.width = document.getElementById("photo_viewer").offsetHeight;
}

const changeImage = (imageName) => {
  document.getElementById("detail_studio_image").src='assets/_img/'+imageName+'.jpg';

  if(imageName == 'pf2'){
    document.getElementById("detail_studio_image").style.width='45px';
  }
  else{
    document.getElementById("detail_studio_image").style.width='145px';
  }
  
    
  // if(number === 'one'){
  //     console.log('진입',number)
  //     console.log(document.getElementById("miss"))
  //     document.getElementById("miss").src='assets/_img/pf1.jpg';
  // }
  // else if(number === 'two'){
  //     console.log('진입',number)
  //     document.getElementById("miss").src='assets/_img/pf2.jpg';
  // }
  // else if(number === 'three'){
  //     console.log('진입',number)
  //     document.getElementById("miss").src='assets/_img/pf3.jpg';
  // }
  // else{
  //     console.log('진입',number)
  //     document.getElementById("miss").src='assets/_img/pf4.jpg';
  // }
}