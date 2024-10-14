<!-- Modal -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <h5 class="modal-title" id="myModalLabel">Advanced Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="d-flex align-items-start"> <!-- Flex container for alignment -->
            <img src="../LMS/your-logo.png" alt="Logo" class="modal-logo mr-3"> <!-- Logo on the left -->
            <form class="form-horizontal" method="post" action="advance_search.php" style="flex: 1;"> <!-- Flex to occupy remaining space -->
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" id="inputTitle" placeholder="Title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="inputAuthor">Author</label>
                    <input type="text" name="author" id="inputAuthor" placeholder="Author" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="modal-footer">
        <button class="btn btn-secondary" data-dismiss="modal" aria-hidden="true">Close</button>
    </div>
</div>
