// var array = ['Nam','Thach','Son','Thuan','Hien'];
// for(i = 0;i < array.length;i = i + 1)
// {
//     document.getElementById('p-' + i).innerHTML = array[i];
//     console.log(array[i]);
// }

var php19 = [{
        'name': 'Nam',
        'height': 170,
        'weight': 60
    },{
        'name': 'Phong',
        'height': 175,
        'weight': 65
    },{
        'name': 'Hai',
        'height': 180,
        'weight': 85
    }];

var lengthArr=php19.length;
for (var i = 0; i < lengthArr; i++) { 
    document.getElementById('p-' + i).innerHTML = php19[i].name + '-' + php19[i].height + '-' + php19[i].weight);
}
