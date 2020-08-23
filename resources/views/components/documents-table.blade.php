<div>
  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th scope="col" class="serial-column">#</th>
        <th scope="col">{{ __('columns.file_name') }}</th>
        <th scope="col">{{ __('columns.file_path') }}</th>
        <th scope="col">{{ __('columns.extension') }}</th>
        <th scope="col">{{ __('columns.created_at') }}</th>
        <th scope="col">{{ __('columns.updated_at') }}</th>
        <th scope="col">{{ __('columns.actions') }}</th>
      </tr>
    </thead>
    <tbody>
      @forelse($documents as $document)
      <tr>
        <th scope="row" class="serial-column">{{ $loop->index + 1 }}</th>
        <td>{{ $document->file_name }}</td>
        <td><a href="{{ asset('storage/' . $document->file_path) }}">{{ $document->file_name }}</a></td>
        <td>{{ $document->extension }}</td>
        <td>{{ $document->created_at->diffForHumans() }}</td>
        <td>{{ $document->updated_at->diffForHumans() }}</td>
        <td class="action-column">
          <form action="{{ route('documents.destroy', $document->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" value="{{ __('buttons.create') }}" class="btn btn-danger btn-sm">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
              </svg>
            </button>
          </form>
        </td>
      </tr>
      @empty
      <tr class="table-warning">
        <td colspan="8" class="text-center">{{ __('messages.empty') }}</td>
      </tr>
      @endforelse
    </tbody>
  </table>
</div>
