var listPenghuni = [
  {'no':'01', 'id':'001', 'no-kamar':'01', 'nama':'Tota Rafael', 'email':'tot@gmail.com', 'no-telepon':'0812-3248-9385', 'nik':'1806002050002'},
  {'no':'02', 'id':'002', 'no-kamar':'02', 'nama':'Rakha Guevara', 'email':'rakha@gmail.com', 'no-telepon':'0812-3248-9385', 'nik':'1806002050002'},
  {'no':'03', 'id':'003', 'no-kamar':'03', 'nama':'Juan Ruben', 'email':'juan@gmail.com', 'no-telepon':'0812-3248-9385', 'nik':'1806002050002'},
  {'no':'04', 'id':'004', 'no-kamar':'04', 'nama':'Madani Shofa', 'email':'shofa@gmail.com', 'no-telepon':'0812-3248-9385', 'nik':'1806002050002'},
]

buildTable(listPenghuni)

function buildTable(data) {

  var table = document.getElementById('list-penghuni')

  table.innerHtml = ''
  for (var i = 0; i < data.length; i++) {

    var row = '<tr> <td>${data[i].no}</td> <td>${data[i].id}</td> <td>${data[i].no-kamar}</td> <td>${data[i].nama}</td> <td>${data[i].email}</td> <td>${data[i].no-telepon}</td> <td>${data[i].nik}</td> </tr>'
    table.innerHtml += row
  }
}
