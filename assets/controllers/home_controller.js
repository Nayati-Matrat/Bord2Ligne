import { Controller } from '@hotwired/stimulus';

export default class extends Controller {
    connect() {
        import('../js/home/map')
    }
}