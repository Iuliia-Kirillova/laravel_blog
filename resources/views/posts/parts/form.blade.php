<div class="form-group">
    <input type="text" class="form-control" name="title" required value="{{ old('title') ?? $post->title ?? '' }}">
</div>
<div class="form-group">
    <textarea rows="10" class="form-control" name="description" required>{{ old('description') ?? $post->description ?? '' }}</textarea>
</div>
<div class="form-group">
    <input type="file" name="img">
</div>
