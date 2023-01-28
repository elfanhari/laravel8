<input type="text" value="{{ old('list', $task->list) }}" class="form form-control me-2 @error('list') is-invalid @enderror" name="list" id="list"  placeholder="The name of the task">
  @error('list')
    <span class="invalid-feedback">{{ $message }}</span>
  @enderror
<button type="submit" class="btn btn-primary mt-2">{{ $submit }}</button>