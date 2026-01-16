class PageController extends Controller {
    public function show($page = 'index') {
        return view('pages.' . $page);
    }
}
