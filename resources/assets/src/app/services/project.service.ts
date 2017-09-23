import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from "rxjs";
import {Utils} from "../utils/utils";
import 'rxjs/add/operator/map';
import {ProjectModel} from "../model/project.model";

@Injectable()
export class ProjectService {
    constructor(private http: HttpClient) {
        this.url = Utils.BASE_URL + 'projects';
    }
    private url;

    public getData(): Observable<{data: ProjectModel[]}> {
        return this.http.get(this.url);
    }
}