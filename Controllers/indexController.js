function login() {
    $('#loginAjax').submit(function() {
        event.preventDefault()
        var username = $("#username").val();
        var password = $("#password").val();
        console.log(username + " " + password);
        // location.replace("./Views/home/index.php");

        let timerInterval
        Swal.fire({
                title: 'กำลังเข้าสู่ระบบ',
                html: 'เข้าสู่ระบบในอีก <strong></strong> วินาที',
                background: '#fff url(/images/trees.png)',
                backdrop: `rgba(0,0,123,0.4) url("/images/nyan-cat.gif") center left no-repeat`,
                timer: 1000,
                onBeforeOpen: () => {
                    Swal.showLoading()
                    timerInterval = setInterval(() => {
                        Swal.getContent().querySelector('strong')
                            .textContent = Swal.getTimerLeft()
                    }, 100)
                },
                onClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.timer
                ) {
                    setTimeout("window.open('./Views/home/index.php', '_self');", 0);
                }
            })
            // 
            // $.ajax({
            //     type: "POST",
            //     url: '/class/login.php',
            //     data: {
            //         username: $("#username").val(),
            //         password: $("#password").val()
            //     },
            //     success: function(data) {
            //         if (data === 'Login') {
            //             window.location.replace('/user-page.php');
            //         } else {
            //             alert('Invalid Credentials');
            //         }
            //     }
            // });
    })
}