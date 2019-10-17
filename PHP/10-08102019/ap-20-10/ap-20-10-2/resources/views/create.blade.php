<form action="/users" method="POST">
    <input type="hidden" name="_token" value={{csrf_token()}}>
    <div>
        <input type='text' placeholder="Nhap ten" name="ten">
    </div>
    <br>
    <div>
        <input type='email' placeholder="Nhap email" name="email">
    </div>
    <br>
    <div>
        <input type='password' placeholder="Nhap mat khau" name="matkhau">
    </div>
    <br>
    <button>Dang Ky</button>
</form>