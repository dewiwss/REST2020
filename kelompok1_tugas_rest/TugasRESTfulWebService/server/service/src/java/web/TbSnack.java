/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package web;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author asus
 */
@Entity
@Table(name = "tb_snack")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "TbSnack.findAll", query = "SELECT t FROM TbSnack t")
    , @NamedQuery(name = "TbSnack.findByIdSnack", query = "SELECT t FROM TbSnack t WHERE t.idSnack = :idSnack")
    , @NamedQuery(name = "TbSnack.findByNamaSnack", query = "SELECT t FROM TbSnack t WHERE t.namaSnack = :namaSnack")
    , @NamedQuery(name = "TbSnack.findByJenisSnack", query = "SELECT t FROM TbSnack t WHERE t.jenisSnack = :jenisSnack")
    , @NamedQuery(name = "TbSnack.findBySupplier", query = "SELECT t FROM TbSnack t WHERE t.supplier = :supplier")})
public class TbSnack implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @NotNull
    @Column(name = "id_snack")
    private Integer idSnack;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 30)
    @Column(name = "nama_snack")
    private String namaSnack;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 10)
    @Column(name = "jenis_snack")
    private String jenisSnack;
    @Basic(optional = false)
    @NotNull
    @Size(min = 1, max = 25)
    @Column(name = "supplier")
    private String supplier;

    public TbSnack() {
    }

    public TbSnack(Integer idSnack) {
        this.idSnack = idSnack;
    }

    public TbSnack(Integer idSnack, String namaSnack, String jenisSnack, String supplier) {
        this.idSnack = idSnack;
        this.namaSnack = namaSnack;
        this.jenisSnack = jenisSnack;
        this.supplier = supplier;
    }

    public Integer getIdSnack() {
        return idSnack;
    }

    public void setIdSnack(Integer idSnack) {
        this.idSnack = idSnack;
    }

    public String getNamaSnack() {
        return namaSnack;
    }

    public void setNamaSnack(String namaSnack) {
        this.namaSnack = namaSnack;
    }

    public String getJenisSnack() {
        return jenisSnack;
    }

    public void setJenisSnack(String jenisSnack) {
        this.jenisSnack = jenisSnack;
    }

    public String getSupplier() {
        return supplier;
    }

    public void setSupplier(String supplier) {
        this.supplier = supplier;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (idSnack != null ? idSnack.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof TbSnack)) {
            return false;
        }
        TbSnack other = (TbSnack) object;
        if ((this.idSnack == null && other.idSnack != null) || (this.idSnack != null && !this.idSnack.equals(other.idSnack))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "web.TbSnack[ idSnack=" + idSnack + " ]";
    }
    
}
