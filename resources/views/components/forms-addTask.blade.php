<div class="form-row">
  {{-- title --}}
  <div class="form-group col-sm-6">
    <label for="title">title:</label>
    <input type="text" class="form-control" id="title" name="task-title" required>
  </div>
  {{-- duration --}}
  <div class="form-group col-sm-6">
    <label for="duration">duration (en heure):</label>
    <input type="number" class="form-control" id="duration" name="task-duration" required> 
  </div>
</div>

{{-- description tasks --}}
<div class="form-row">
  <div class="form-group col-sm-12">
    <label for="tasks">description (tasks):</label>
    <textarea class="form-control" id="tasks" name="task-tasks" required></textarea>
  </div>
</div>

{{-- category --}}
<div class="form-row">
  <div class="form-group col-sm-12">
    <label for="category">category:</label>
    <select id="category" name="task-category" required>
      <option value="web">Web</option>
      <option value="design">Design</option>
    </select>
  </div>
</div>

{{-- free --}}
<div class="form-row">
  <label for="free" class="mt-2 mr-3">payant</label>
  <label class="switch">
    <input type="checkbox" id="free" name="task-free">
    <span class="slider round"></span>
  </label>
  <label for="free" class="mt-2 ml-3">free</label>
</div>