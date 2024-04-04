<form action="/payUrl" method="post">
    @csrf
    <input type="number" value="500000" name="price">
    <button type="submit" name="payUrl" id="momo">submit</button>
</form>