import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from "rxjs";
import {Utils} from "../utils/utils";
import 'rxjs/add/operator/map';
import {ContactFormModel} from "../model/contact-form";
import {BaseModel} from "../model/base-model";

@Injectable()
export class ContactFormService {
    constructor(private http: HttpClient) {
        this.url = Utils.BASE_URL + 'contact/send';
    }
    private url;

    public send(model: ContactFormModel): Observable<BaseModel> {
        return this.http.post(this.url, model);
    }
}