document.addEventListener("DOMContentLoaded", function() {

  var subreddits=["ProductPorn","CustomerSuccess","brand","Home","Appliances","Laptop","Sell"];




  function logArrayElements(subreddit, index, array) {
  //   console.log('a[' + index + '] = ' + subreddit);
    var index = index + 1;
    var liDiv = document.querySelector('li:nth-child(' + index + ') div');
    var li = document.querySelector('li:nth-child(' + index + ')');
    console.log(liDiv);
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('GET', 'http://www.reddit.com/r/' + subreddit + '/about.json', true);
    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState == 4) {
          if(xmlhttp.status == 200) {
              var obj = JSON.parse(xmlhttp.responseText);
              var subDesc = obj.data.public_description;
              var subscribers = obj.data.subscribers
  //             console.log(subDesc, subscribers);
              if (subDesc === ''){
                liDiv.innerHTML = '<span class="sub-desc"> No Public Description </span>';
              } else {
                liDiv.innerHTML = '<span class="sub-desc">' + subDesc + '</span>';
                
              }
            
              liDiv.innerHTML += '<div class="subscribers">' + subscribers + ' Subscriber</div>';
            
              li.addEventListener("click", function() {
                var children = this.children;
                console.log(children);
                children[2].classList.toggle("show");
              });
           }
      }
    };
    xmlhttp.send(null);

  }
 
  subreddits.forEach(logArrayElements);


});