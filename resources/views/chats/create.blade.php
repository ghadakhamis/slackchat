
    <form method="post" action="/chats">
       <div class="form-group">
            {{csrf_field()}}
            <label>User</label>
            <input type="text" name="user" class="form-control"/>
        </div>
        <div class="form-group">
            {{csrf_field()}}
            <label>Mseeage</label>
            <textarea name="message" class="form-control"></textarea>
         </div>
         <input type="submit" value="Create" class="btn btn-success">
    </form>

