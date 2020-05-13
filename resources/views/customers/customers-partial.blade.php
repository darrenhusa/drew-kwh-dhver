@foreach ($customers as $customer)
  <tr>
    <td>{{ $customer->first_name }}</td>
    <td>{{ $customer->last_name }}</td>
    <td>
      <a href="/customers/{{ $customer->id }}/edit">
        <button type="submit">Edit</button>
      </a>
    </td>
    <td>
      <form method="POST" action="/customers/{{ $customer->id }}">
        @method('DELETE')
        @csrf
        <p>
          <button type="submit">Delete</button>
        </p>
      </form>
    </td>
    <td>
      <a href="/reservations/create/{{ $customer->id }}">
        <button type="submit">Create Reservation</button>
      </a>
    </td>
  </tr>
@endforeach
