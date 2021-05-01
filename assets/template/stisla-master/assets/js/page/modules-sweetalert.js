"use strict";

$("#Swal-1").click(function() {
	Swal('Hello');
});

$("#Swal-2").click(function() {
	Swal('Good Job', 'You clicked the button!', 'success');
});

$("#Swal-3").click(function() {
	Swal('Good Job', 'You clicked the button!', 'warning');
});

$("#Swal-4").click(function() {
	Swal('Good Job', 'You clicked the button!', 'info');
});

$("#Swal-5").click(function() {
	Swal('Good Job', 'You clicked the button!', 'error');
});

$("#Swal-6").click(function() {
  Swal({
      title: 'Are you sure?',
      text: 'Once deleted, you will not be able to recover this imaginary file!',
      icon: 'warning',
      buttons: true,
      dangerMode: true,
    })
    .then((willDelete) => {
      if (willDelete) {
      Swal('Poof! Your imaginary file has been deleted!', {
        icon: 'success',
      });
      } else {
      Swal('Your imaginary file is safe!');
      }
    });
});

$("#Swal-7").click(function() {
  Swal({
    title: 'What is your name?',
    content: {
    element: 'input',
    attributes: {
      placeholder: 'Type your name',
      type: 'text',
    },
    },
  }).then((data) => {
    Swal('Hello, ' + data + '!');
  });
});

$("#Swal-8").click(function() {
  Swal('This modal will disappear soon!', {
    buttons: false,
    timer: 3000,
  });
});