import {Injectable} from '@angular/core';
import {
    HttpRequest,
    HttpHandler,
    HttpEvent,
    HttpInterceptor
} from '@angular/common/http';
import {Observable} from 'rxjs/Observable';
import {Meta} from "@angular/platform-browser";

@Injectable()
export class TokenInterceptor implements HttpInterceptor {
    constructor(private meta: Meta) {}

    intercept(request: HttpRequest<any>, next: HttpHandler): Observable<HttpEvent<any>> {
        request = request.clone({
            setHeaders: {
                'X-CSRF-TOKEN': this.meta.getTag('name="csrf-token"').content
            }
        });
        return next.handle(request);
    }
}