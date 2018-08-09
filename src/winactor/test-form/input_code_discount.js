$(() => {
    const $pass = $("#pass");
    const $output = $("#output");
    $output.on("click", () => {
        $.ajax({
            url: $pass.val() + "paying-beginner.html"
        }).then(html => {
            $("body").html(html);
        }).catch(() => {
            alert("パスワード認証に失敗しました");
            $pass.val("");
        });
    })
    $pass.on("keydown", e => {
        if(e.keyCode === 13) $output.trigger("click");
    });
});