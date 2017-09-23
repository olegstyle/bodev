import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ServerData } from "../model/server-data";
import { Observable } from "rxjs";
import {Utils} from "../utils/utils";
import 'rxjs/add/operator/map';
import {TechGroupModel} from "../model/tech-group.model";

@Injectable()
export class TechGroupService {
    constructor(private http: HttpClient) {
        this.url = Utils.BASE_URL + 'techGroups';
    }
    private url;

    public getData(): Observable<{data: TechGroupModel[]}> {
        return this.http.get(this.url);
    }
}