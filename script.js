fetch(`get.php`)
  .then((response) => response.json())
  .then((data) => {
  
  data.forEach(element => {
    console.log(element.nom)
  });})