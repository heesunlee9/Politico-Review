package kr.co.company.politicoreview;

/**
 * Created by SM on 2018-01-19.
 */

public class Notice {

    String notice;
    String name;
    String date;

    public Notice(String name, String date, String notice) {
        this.name = name;
        this.date = date;
        this.notice = notice;
    }

    public String getNotice() {
        return notice;
    }

    public void setNotice(String notice) {
        this.notice = notice;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }
}
