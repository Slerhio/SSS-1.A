<html>
     <title>SSS Laravel</title>
     <div>
          <li><a href="{{ route('contacts.index') }}">All Contacts</a></li>
          <li><a href="{{ route('contacts.create') }}">Create New Contact</a></li>
          <li><a href="{{ route('contacts.show', 1) }}">Show contact (id 1)</a></li>     
     </div>
</html>