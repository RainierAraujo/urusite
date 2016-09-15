app.controller('MainController',['$scope',function($scope){
  $scope.title = 'Toy mas perdido que el hijo de limbergh';
  $scope.promo = 'nalguita';
  $scope.products = [{
     name: 'The Book of Trees', 
    price: 19, 
    pubdate: new Date('2014', '03', '08'), 
    cover: 'img/the-book-of-trees.jpg',
    likes: 0,
    dislikes: 0 
  },
  { 
    name: 'Program or be Programmed', 
    price: 8, 
    pubdate: new Date('2013', '08', '01'), 
    cover: 'img/program-or-be-programmed.jpg', 
    likes: 0,
    dislikes: 0 
  },
  {
  	name:'Huele a mierda',
    price: 9,
    pubdate: new Date('2014','11','14'),
    cover: 'http://lh6.ggpht.com/__mADelK4o78/TGaysteVCMI/AAAAAAAAFeU/fvw7rClEbmc/elefante_cagon.jpg',
    likes: 0,
    dislikes: 0 
  },
  {
    name: 'satan es mi pastor',
    price: 10,
    pubdate: new Date('2006','06','06'),
    cover: 'https://cronicadeunatraicion.files.wordpress.com/2014/09/satan.jpg?w=290&h=300',
    likes: 0,
    dislikes: 0 
  }                  
  ];
  $scope.plusOne = function(index){
    $scope.products[index].likes += 1;
  };
  $scope.minusOne =  function(index){
    $scope.products[index].dislikes+=1;
  };
}]);