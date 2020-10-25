<div class="card mt-3">
  <div class="card-body">
    <div class="d-flex flex-row">
      <a href="{{ route('users.show', ['user'=> $article->user ]) }}">
        <i class="fas fa-user-circle fa-3x mr-1"></i>
      </a>
      <div>
        <div class="font-weight-bold">
          {{ $article->user->name }}
        </div>
        <div class="font-weight-lighter">
          {{ $article->created_at->format('Y/m/d H:i') }}
        </div>
      </div>
      @if (Auth::id() === $article->user_id)
      <div class="d-flex ml-auto card-text">
        <div class="dropdown">
          <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <button type="button" class="btn btn-link">
              <i class="fas fa-ellipsis-v"></i>
            </button>
          <div class="dropdown-menu  dropdown-menu-right">
            <a class="dropdown-item" href="{{ route('articles.edit', ['article' => $article]) }}">
              <i class="fas fa-pen mr-1"></i>投稿を編集する
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" data-toggle="modal" data-target="#modal-delete-{{ $article->id }}">
              <i class="fas fa-trash-alt mr-1"></i>投稿を削除する
            </a>
          </div>
          </a>
        </div>
      </div>

      <!-- modal -->
      <div id="modal-delete-{{ $article->id }}" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form method="POST" action="{{ route('articles.destroy', ['article' => $article->id ]) }}">
              @csrf
              @method('DELETE')
              <div class="modal-body">
                {{ $article->title }}を削除します。よろしいですか？
              </div>
              <div class="modal-footer justify-content-between">
                <a class="btn btn-outline-grey" data-dismiss="modal">キャンセル</a>
                <button type="submit" class="btn btn-danger">削除する</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- modal -->
      @endif
    </div>
    <h3 class="h4 card-title mt-2">
      <a class="text-dark" href="{{ route('articles.show', ['article' => $article ]) }}">
        {{ $article->title }}
      </a>
    </h3>
    <div class="card-text">
      {{ $article->body }}
    </div>
  </div>
  <div class="card-body pt-0 pb-2 pl-3">
    <!-- Vue.js -->
    <div class="card-text">
      <article-like></article-like>
    </div>
  </div>
</div>
