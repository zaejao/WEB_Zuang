function getUrlVars() {
    var vars = [],
        hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for (var i = 0; i < hashes.length; i++) {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
function getMoney() {
    var orglevelId = getUrlVars()["personId"];
    // console.log(orglevelId);

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "../../Model/Money/GetMoney.php",
        data: {
            orglevelId: orglevelId
        },
        success: function(data) {
            $("#orgPositionName").append(data.orgPositionName);
            $("#orgPositionSemiAbbrName").append(data.orgPositionSemiAbbrName);
            $("#saralyRateAbbrName").append(data.saralyRateAbbrName);
            $("#qquota").append(data.qquota);
            // console.log(data.IsActive);
        

            // console.log(data);
        },
        error: function(error) {
            // alert(error);
            // console.log(error);
        }
    });
}