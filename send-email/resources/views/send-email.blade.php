<div>
    <h1>Add Email Details</h1>
    <form action="{{ url('send-email') }}" method="POST">
    @csrf
    <input type="text" name="to" placeholder="Enter email address" required />
    <br/>
    <br/>
    <input type="text" name="subject" placeholder="Enter email subject" required />
    <br/>
    <br/>
    <textarea name="message" placeholder="Enter email message" required></textarea>
    <br/>
    <br/>
    <button type="submit">Send Email</button>
</form>

</div>
