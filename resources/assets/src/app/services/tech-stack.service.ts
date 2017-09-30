import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from "rxjs";
import {Utils} from "../utils/utils";
import 'rxjs/add/operator/map';
import {TechStackModel} from "../model/tech-stack.model";

@Injectable()
export class TechStackService {
    constructor(private http: HttpClient) {
        this.url = Utils.BASE_URL + 'techStacks';
    }
    private url;

    public getData(): Observable<{data: TechStackModel[]}> {
        return this.http.get(this.url);
    }
}